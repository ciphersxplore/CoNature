const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const timestamps = require('mongoose-timestamp')

const UserSchema = new Schema({
  first_name: {
    type: String,
    required: true
  },
  last_name: {
    type: String,
    required: true
  },
  image_path: {
    type: String,
    required: true
  },
  contact_number: {
    type: String,
    required: true
  },
  email_address: {
    type: String,
    required: true
  },
  password: {
    type: String,
    required: true
  },
  role: {
    type: String,
    required: true
  },
  organization: {
    type: String,
    required: true
  },
  status: String
});

module.exports = mongoose.model("User", UserSchema);