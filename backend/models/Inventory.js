const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const InventorySchema = new Schema({
  user_id: {
    type: Schema.Types.ObjectId,
    ref: "User",
    required: true
  },
  item_name: String,
  item_description: String,
  item_category: String,
  item_path: String,
  timestamp: {
    type: Date,
    default: Date.now
  },
  status: String,
  quantity: Number
});

module.exports = mongoose.model("Inventory", InventorySchema);