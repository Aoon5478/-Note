const knex = require('./../helpers/init_knex')

module.exports = {
  getByUsername: async (username) => {
    return await knex
      .select()
      .from('users')
      .where({ 'username': username })
  }
}