const knex = require('./../helpers/init_knex')

module.exports = {
  getAll: async () => {
    return await knex
      .select(
        'notes.id',
        'email_status',
        'send_status',
        'description',
        'email',
        'date_alert',
        'time_alert',
        'tag',
        'path_image'
      )
      .from('notes')
      .leftJoin('users', 'notes.create_by', 'users.id')
  },
  update: async (id) => {
    return await knex('notes').where('id', id).update({
      send_status: 'send'
      })
  }
}