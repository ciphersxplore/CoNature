const auth = require('../middlewares/auth');
const contributor = require('../middlewares/contributor');
const facility = require('../middlewares/facility');
const handler = require('../middlewares/handler');
const mongoose = require("mongoose");
const InventoryModel = require("../models/Inventory");
const express = require("express");
const router = express.Router();

router.get("/", async (req, res) => {
    let inventories = await InventoryModel.find();
    res.send(inventories);
});

//contributor indicates items for deposit 
router.post("/:id", [auth, contributor], async (req, res) => {
    let inventory = await InventoryModel({
        user_id: req.params.id,
        checker: ' ',
        item_name: req.body.item_name,
        item_description: req.body.item_description,
        item_category: req.body.item_category,
        item_path: req.body.item_path,
        item_measure: req.body.item_measure,
        status: 'for deposit',
        quantity: req.body.quantity,
    });

    inventory = await inventory.save();
    res.send(inventory);
});

//handler approves or edits the inventory for deposit, id should be inventory_id
router.put("/:id", [auth, handler], async (req, res) => {

    let inventory = await InventoryModel.findById(req.params.id);

    inventory.item_name = req.body.item_name;
    inventory.item_description = req.body.item_description;
    inventory.item_category = req.body.item_category;
    inventory.item_measure = req.body.item_measure;
    inventory.item_path = req.body.item_path;
    inventory.status: 'in',
        inventory.quantity = req.body.quantity


    inventory = await inventory.save();
    res.send(inventory);
});

//items sent to facility
router.post("/:id", [auth, facility], async (req, res) => {
    let inventory = await InventoryModel({
        user_id: req.params.id,
        checker: ' ',
        item_name: req.body.item_name,
        item_description: req.body.item_description,
        item_category: req.body.item_category,
        item_path: req.body.item_path,
        item_measure: req.body.item_measure,
        status: 'out',
        quantity: req.body.quantity,
    });

    inventory = await inventory.save();
    res.send(inventory);
});

router.delete("/:id", async (req, res) => {
    let inventory = await inventoryModel.findByIdAndRemove(req.params.id);
    res.send(inventory);
});

module.exports = router;