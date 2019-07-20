const config = require('../config');
const jwt = require('jsonwebtoken');
const bcyrpt = require('bcrypt');
const UserModel = require('../model/User');
const express = require('express');
const router = express.Router();

router.post('/', async (req, res) => {
    let user = await UserModel.findOne({
        email: req.body.email
    });

    if (!user) return res.status(400).send('Email or password is incorrect.');

    let matched = await bcrypt.compare(req.body.password, user.password);

    if (!matched) return res.status(400).send('Email or password is incorrect.');

    const token = jwt.sign({
        _id: user._id,
        first_name: user.first_name,
        last_name: user.last_name
    }, config.secret);

    res.header('x-auth-token', token).send(user);
});

module.exports = router;