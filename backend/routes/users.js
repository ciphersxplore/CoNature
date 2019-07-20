const auth = require("../middlewares/auth");
const mongoose = require("mongoose");
const UserModel = require("../models/User");
const express = require("express");
const router = express.Router();
const bcrypt = require("bcrypt");

router.get("/", async (req, res) => {
  let users = await UserModel.find();
  res.send(users);
});

//Registration - unique password should be handled by front-end
router.post("/", async (req, res) => {
  if (!req.body.email_address) return res.status(400).send("Email is required");

  if (!req.body.password) return res.status(400).send("Password is required");

  let user = await UserModel({
    first_name: req.body.first_name,
    last_name: req.body.last_name,
    image_path: req.body.image_path,
    contact_number: req.body.contact_number,
    email_address: req.body.email_address,
    role: 'contributor',
    organization: 'to follow',
    status: 'active'
  });

  let salt = await bcrypt.genSalt(10);
  let hashed = await bcrypt.hash(req.body.password, salt);
  user.password = hashed;

  try {
    user = await user.save();
    res.send(user);
  } catch (ex) {
    res.status(400).send("Provided data is invalid. Please send a valid data!");
  }
});

//Edit profile, must be logged in
router.put("/:id", auth, async (req, res) => {
  let user = await UserModel.findById(req.params.id);
  user.first_name = req.body.first_name;
  user.last_name = req.body.last_name;
  user.image_path = req.body.image_path;
  user.contact_number = req.body.contact_number;
  user.email_address = req.body.email_address;
  user.role = req.body.role;
  user.organization = req.body.organization;
  user.status = req.body.status;

  let salt = await bcrypt.genSalt(10);
  let hashed = await bcrypt.hash(req.body.password, salt);
  user.password = hashed;

  user = await user.save();
  res.send(user);
});

router.delete("/:id", auth, async (req, res) => {
  let user = await UserModel.findByIdAndRemove(req.params.id);
  res.send(user);
});

module.exports = router;