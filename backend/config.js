const config = {
  //Database URL
  databaseLink:
    "mongodb+srv://ciphers:Ciphers1234@cluster0-hzlr1.mongodb.net/ciphers?retryWrites=true",

  //Establish the port
  port: process.env.POST || 3000,

  //App secret key
  secretKey: process.env.SECRET_KEY || "Ciphers"
};

module.exports = config;
