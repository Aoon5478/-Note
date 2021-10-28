const knex = require('./../helpers/init_knex')

module.exports={
    getAll:async()=>{
      return  await knex.select().table('notes')
    }
}