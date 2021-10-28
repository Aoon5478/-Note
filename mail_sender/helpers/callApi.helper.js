const axios = require('axios')
const callApi = () => {
    setInterval(async () => {
        const sendmail = await axios.post('http://localhost:3000/mail/sendmail')
        console.log(sendmail.data)
    }, 1000 * 10);
}
module.exports = callApi //