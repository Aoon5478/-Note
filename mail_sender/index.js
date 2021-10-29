require("dotenv").config();
const express = require('express')
const cors = require('cors')

const app = express()
const port = 3000

const callApi = require('./helpers/callApi.helper')

app.use(cors())

const helloRoute = require('./routes/hello.route')
const mailRoute = require('./routes/mail.route')

app.use('/mail', mailRoute)
app.use('/hello', helloRoute)

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
  callApi()
})