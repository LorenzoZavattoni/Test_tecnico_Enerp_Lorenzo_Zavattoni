/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/welcome.blade.php",
    "./resources/views/people/index_people.blade.php",
    "./resources/views/people/edit_person.blade.php",
    "./resources/views/people/create_person.blade.php",
    "./resources/views/events/show_event.blade.php",
    "./resources/views/events/edit_partecipant.blade.php",
    "./resources/views/events/edit_event.blade.php",
    "./resources/views/events/create_event.blade.php",
    "./resources/views/components/navbar.blade.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

