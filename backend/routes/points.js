const mongoose = require("mongoose");
const PointModel = require("../models/Point");
const express = require("express");
const router = express.Router();

router.get("/", async (req, res) => {
  let points = await PointModel.find();
  res.send(points);
});

router.post("/add/:id", async (req, res) => {
  let user_id = req.params.id;
  let added_points = req.body.added_points;
  let inventory_id = req.body.inventory_id;
  let remarks = req.body.remarks;

  let points = await PointModel({
    user_id: user_id,
    points: added_points,
    inventory_id: inventory_id,
    remarks: remarks
  });

  try {
    points = await points.save();
    res.send(points);
  } catch (ex) {
    res.status(400).send("Error met.");
  }
});

router.post("/less/:id", async (req, res) => {
  let user_id = req.params.id;
  let {
    deducted_points,
    reward_id,
    remarks
  } = req.body;

  let conversion = await PointModel({
    user_id: user_id,
    points: deducted_points,
    reward_id: reward_id,
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