Step to implement message application on backend:

1. Build database
Tables:
- rooms (id, name, status, created, updated, deleted): This is table for management rooms chatting
- users (id, username, name_display, status, email, password, created, updated, deleted): This is table for management users chatting send message between
- messages (id, room_id, user_id, message, created, updated, deleted): This table for management message users on room

You can see more on database/migradtions

2. Backend

	Use laravel and docker for build backend with api system

	List api:

		api/show_list_rooms: This is api list rooms for user can choose join
		api/show_users_on_room: This is api for show number users on room
		api/save_message : This is api for saving message
		api/list_old_message : This is api list old messages showing on chatting two users


3. Frontend

		Use angularjs for show data from api on backend return
		1. Build template for show list rooms
		User after login can see list rooms then click to join room
		2. User can see total users are available on room
		3. User can send message on room is joined
		4. User click logout button to out of message application

4. Use pusher for making real time chatting




How to build message app client angular

1. Go to folder message-app-client-angular


2. Install all the npm packages

```bash
npm install
```

3. In order to run the application type the following command

```bash
npm start
```

the application will auto start with port is building by angular





