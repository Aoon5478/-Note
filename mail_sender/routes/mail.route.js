const express = require('express')
const router = express.Router()

const mailController = require('./../controllers/mail.controller')

router.post('/sendmail',mailController.sendmail)
router.get('/reset-password',mailController.resetPassword)


module.exports = router