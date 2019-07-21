const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const timestamps = require('mongoose-timestamp')

const PointsSchema = new Schema({
  user_id: {
    type: Schema.Types.ObjectId,
    ref: "User",
    required: true
  },
  points: Number,
  reward_item: String,
  reward_points_required: Number,
  remarks: String
});

PointsSchema.plugin(timestamps);

module.exports = mongoose.model("Points", PointsSchema);