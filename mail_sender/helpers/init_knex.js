const knex = require('knex')({
    client: "mysql",
    connection: {
      host: "localhost",
      user: "root",
      password: "",
      database: "note_db",
      port : "3306"
    }
  })
  module.exports = knex