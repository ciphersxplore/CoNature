const mongoose = require("mongoose");
const UserModel = require("../models/User");
const express = require("express");
const router = express.Router();

router.get("/", async (req, res) => {
  let users = await UserModel.find();
  res.send(users);
});

router.post("/", async (req, res) => {
  console.log("Hello");
  // if (!req.body.email_address) return res.status(400).send("Email is required");
  // if (!req.body.password) return res.status(400).send("Password is required");
  // let user = await UserModel({
  //   first_name: req.body.first_name,
  //   last_name: req.body.last_name,
  //   image_path: req.body.image_path,
  //   contact_number: req.body.contact_number,
  //   email_address: req.body.email_address,
  //   role: req.body.role,
  //   organization: req.body.organization,
  //   status: req.body.status
  // });
  // let salt = await bcrypt.genSalt(10);
  // let hashed = await bcrypt.hash(req.body.password, salt);
  // user.password = hashed;
  // try {
  //   user = await user.save();
  //   res.send(user);
  // } catch (ex) {
  //   res.status(400).send("Provided data is invalid. Please send a valid data!");
  // }
});

router.put("/:id", async (req, res) => {
  let user = await UserModel.findById(req.params.id);
  first_name = req.body.first_name;
  last_name = req.body.last_name;
  image_path = req.body.image_path;
  contact_number = req.body.contact_number;
  email_address = req.body.email_address;
  password = req.body.password;
  role = req.body.role;
  organization = req.body.organization;
  status = req.body.status;

  let salt = await bcrypt.genSalt(10);
  let hashed = await bcrypt.hash(req.body.password, salt);
  user.password = hashed;

  user = await user.save();
  res.send(user);
});

router.delete("/:id", async (req, res) => {
  let user = await UserModel.findByIdAndRemove(req.params.id);
  res.send(user);
});
module.exports = router;
