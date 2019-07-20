const auth = require('../middlewares/auth');
const handler = require("../middlewares/handler");
const contributor = require("../middlewares/contributor");
const mongoose = require("mongoose");
const PointModel = require("../models/Point");
const express = require("express");
const router = express.Router();

router.get("/", async (req, res) => {
  let points = await PointModel.find();
  res.send(points);
});


// called when handler approves the inventory for deposit to grant points
router.post("/add/:id", [auth, handler], async (req, res) => {
  let user_id = req.params.id;
  let added_points = req.body.added_points;
  let remarks = req.body.remarks;

  let points = await PointModel({
    user_id: user_id,
    points: added_points,
    remarks: remarks
  });

  try {
    points = await points.save();
    res.send(points);
  } catch (ex) {
    res.status(400).send("Error met.");
  }
});


//contributor claims or converts the points 
router.post("/less/:id", [auth, contributor], async (req, res) => {
  let user_id = req.params.id;
  let {
    deducted_points,
    reward_points_required,
    remarks
  } = req.body;

  let conversion = await PointModel({
    user_id: user_id,
    points: deducted_points,
    reward_points_required: reward_points_required,
    remarks: remarks
  });

  try {
    conversion = await conversion.save();
    res.send(conversion);
  } catch (ex) {
    res.status(400).send("Error met");
  }
});

module.exports = router;