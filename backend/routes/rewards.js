const mongoose = require("mongoose");
const RewardModel = require("../models/Reward");
const express = require("express");
const router = express.Router();

router.get("/", async (req, res) => {
    let rewards = await RewardModel.find();
    res.send(rewards);
});

router.post("/", async (req, res) => {
    let reward = await RewardModel;
    ({
        image_path: req.body.image_path,
        item: req.body.item,
        points_required: req.body.points_required
    });

    reward = await reward.save();
    res.send(reward);
});

router.put("/:id", async (req, res) => {

    let reward = await RewardModel.findById(req.params.id);
    image_path = req.body.image_path;
    item = req.body.item;
    points_required = req.body.points_required;

    reward = await reward.save();
    res.send(reward);
});

router.delete("/:id", async (req, res) => {
    let reward = await RewardModel.findByIdAndRemove(req.params.id);
    res.send(reward);
});

module.exports = router;