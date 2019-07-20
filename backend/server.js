const config = require("./config");
const user = require("./routes/users");
const point = require("./routes/points");
const express = require("express");
const app = express();
const mongoose = require("mongoose");

mongoose
  .connect(config.databaseLink, {
    useNewUrlParser: true
  })
  .then(() => {
    console.log("connected to db!");
  })
  .catch();

app.get("/", function(req, res) {
  res.send("Hello");
});

app.use(express.json());
app.use("/api/users", user);
app.use("/api/points", point);

app.listen(config.port, () => {
  console.log(`listening to port ${config.port}`);
});
