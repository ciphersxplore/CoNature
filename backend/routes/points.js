const mongoose = require("mongoose");
const PointModel = require("../models/Point");
const express = require("express");
const router = express.Router();

router.get("/", async (req, res) => {
  let inventory = await PointModel.find();
  res.send(users);
});

router.post("/add/:id", async (req, res) => {
  let user_id = req.params.id;
  let added_points = req.body.added_points;
  let inventory_id = req.body.inventory_id;
  let remarks = req.body.remarks;

  let points = await PointModel({
    user_id: user_id,
    added_points: added_points,
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
    let added_points = req.body.
});

module.exports = router;
