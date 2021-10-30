const express = require('express')
const router = express.Router()

const helloController = require('./../controllers/hello.controller')

router.post('/say-hello',helloController.sayHello)


module.exports = router