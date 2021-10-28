// เรียกใช้
const notesModel = require('./../models/notes.model')
const nodemailer = require('nodemailer')

module.exports = {
    sendmail: async (req, res) => {
        const doesSelect = await notesModel.getAll()
        // ตัด
        const today = (await new Date()).toString().substr(0, 10) // date now

        const time = (new Date()).toString().substr(16, 5) //time now
        // console.log(time)

        const notes = []
        await doesSelect.map(async (select) => {
            const selectDate = await new Date(select.date_alert)
                .toString()
                .substr(0, 10)
            const { email_status, send_status, time_alert } = select
            // console.log('time_alert'+time_alert.toString().substr(0,5));
            if (
                selectDate == today &&
                email_status == 'active' &&
                send_status == 'unsend' &&
                time_alert.toString().substr(0, 5) == time) {
                notes.push(select)
            }
        })
        const transporter = nodemailer.createTransport({
            service: 'gmail',
            auth: {
                user: 'sujiwan678@gmail.com', // your email
                pass: '0987654321sujiwan' // your email password
            }
        });
        console.log(notes)
        notes.map(note => {


            const { id, description, email, date_alert, } = note
            const mailOptions = {
                from: 'sujiwan678@gmail.com',                // sender
                to: email,                // list of receivers
                subject: 'แจ้งเตือนผ่านเมล' + date_alert,              // Mail subject
                html: '<span>' + description + '</span>'   // HTML body
            };
            transporter.sendMail(mailOptions, async function (err, info) {
                if (err) { console.log(err) }
                else {
                    console.log(info);
                    const doseUpdate = await notesModel.update(id)
                }
            });
        })
        res.send({ notes, today })
    },
    resetPassword: async (req, res) => {
        const mail = req.query.mail
        console.log(mail);

        const transporter = nodemailer.createTransport({
            service: 'gmail',
            auth: {
                user: 'sujiwan678@gmail.com', // your email
                pass: '0987654321sujiwan' // your email password
            }
        });

        const mailOptions = {
            from: 'sujiwan678@gmail.com',                // sender
            to: mail,                // list of receivers
            subject: 'เปลี่ยนรหัสผ่าน',              // Mail subject
            html: '<span>' + description + '</span>'   // HTML body
        };

        transporter.sendMail(mailOptions, async function (err, info) {
            if (err) { console.log(err) }
            else {
                console.log(info);
                const doseUpdate = await notesModel.update(id)
            }
        });

        res.send({ mail })
    }

}