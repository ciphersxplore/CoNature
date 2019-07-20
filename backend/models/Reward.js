const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const RewardSchema = new Schema({
  item: String,
  points_required: Number
});

module.exports = mongoose.model("Reward", RewardSchema);
