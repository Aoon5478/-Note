const helloModel = require('./../models/hello.model')
module.exports = {
    sayHello: async (req, res) => {
        const message = "hello word"
        // ดึงค่าค่าจากโมเด
        const selectNotes = await helloModel.getAll()
        // console.log(selectNotes)
        res.send({ message, selectNotes })
    }
}