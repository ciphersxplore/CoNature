const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const PointsSchema = new Schema({
  user_id: {
    type: Schema.Types.ObjectId,
    ref: "User",
    required: true
  },
  points: Number,
  inventory_id: {
    type: Schema.Types.ObjectId,
    ref: "Inventory"
  },
  reward_id: {
    type: Schema.Types.ObjectId,
    ref: "Reward"
  },
  remarks: String,
  timestamp: {
    type: Date,
    default: Date.now
  }
});

module.exports = mongoose.model("Points", PointsSchema);