const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const RewardSchema = new Schema({
  image_path: String,
  item: String,
  points_required: Number,
  category: String //gift , donation
});

module.exports = mongoose.model("Reward", RewardSchema);