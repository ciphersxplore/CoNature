const config = require('../config');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcrypt');
const UserModel = require('../models/User');
const express = require('express');
const router = express.Router();

//login, provides token
router.post('/', async (req, res) => {
    let user = await UserModel.findOne({
        email_address: req.body.email_address
    });

    if (!user) return res.status(400).send('Email or password is incorrect.');

    let matched = await bcrypt.compare(req.body.password, user.password);

    if (!matched) return res.status(400).send('Email or password is incorrect.');

    const token = jwt.sign({
        _id: user._id,
        first_name: user.first_name,
        last_name: user.last_name,
        role: user.role
    }, config.secretKey);

    res.header('x-auth-token', token).send(user);
});

module.exports = router;