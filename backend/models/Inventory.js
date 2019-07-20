const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const InventorySchema = new Schema({
  user_id: {
    type: Schema.Types.ObjectId,
    ref: "User",
    required: true
  },
  checker: {
    type: Schema.Types.ObjectId,
    ref: "User",
    required: true
  },
  item_name: String,
  item_description: String,
  item_category: String,
  item_path: String,
  item_measure: String,
  status: String,
  quantity: Number
});

InventorySchema.plugin(timestamps);

module.exports = mongoose.model("Inventory", InventorySchema);