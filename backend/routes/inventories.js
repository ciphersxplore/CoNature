const mongoose = require("mongoose");
const InventoryModel = require("../models/Inventory");
const express = require("express");
const router = express.Router();

router.get("/", async (req, res) => {
    let inventories = await InventoryModel.find();
    res.send(rewards);
});

router.post("/:id", async (req, res) => {
    let inventory = await InventoryModel;
    ({
        user_id: req.params.id,
        item_name: req.body.item_name,
        item_description: req.body.item_description,
        item_category: req.body.category,
        item_path: req.body.item_path,
        status: req.body.status,
        quantity: req.body.quantity,
    });

    inventory = await inventory.save();
    res.send(inventory);
});

router.put("/:id", async (req, res) => {

    let inventory = await InventoryModel.findById(req.params.id);

    item_name = req.body.item_name;
    item_description = req.body.item_description;
    item_category = req.body.item_category;
    item_path = req.body.item_path;

    inventory = await inventory.save();
    res.send(inventory);
});

router.delete("/:id", async (req, res) => {
    let inventory = await inventoryModel.findByIdAndRemove(req.params.id);
    res.send(inventory);
});

module.exports = router;