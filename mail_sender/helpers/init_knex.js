const knex = require('knex')({
    client: "mysql",
    connection: {
      host: process.env.SERVER_NAME,
      user: process.env.DATABASE_USERNAME,
      password: process.env.DATABASE_PASSWORD,
      database: process.env.DATABASE_NAME,
      port : process.env.DATABASE_PORT
    }
  })
  module.exports = knex