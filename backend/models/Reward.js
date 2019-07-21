const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const timestamps = require('mongoose-timestamp')

const RewardSchema = new Schema({
  image_path: String,
  item: String,
  points_required: Number,
  category: String //gift , donation
});

module.exports = mongoose.model("Reward", RewardSchema);