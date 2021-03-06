<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Events</title>

		<script src="./public/bower_components/angular/angular.js"></script>
		<script src="./public/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
		<script src="./public/bower_components/angular-resource/angular-resource.js"></script>
		<script src="./public/bower_components/angular-route/angular-route.js"></script>
		<script src="./public/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
		<script src="./public/bower_components/jquery/dist/jquery.js"></script>
		<script src="./public/bower_components/angular-local-storage/dist/angular-local-storage.js"></script>
		<script src="./public/bower_components/ng-file-upload/ng-file-upload.js"></script>
		<script src="./public/bower_components/qrcode-generator/js/qrcode.js"></script>
		<script src="./public/bower_components/angular-qrcode/qrcode.js"></script>

		<link rel="stylesheet" href="./public/assets/css/style.css">
		<link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/bootstrap.css">

		<script src="./public/app.js"></script>
		<script src="./public/routes/home.js"></script>
		<script src="./public/routes/talk.js"></script>
		<script src="./public/routes/events.js"></script>
		<script src="./public/routes/public.js"></script>

		<script src="./public/services/atts.js"></script>
		<script src="./public/services/user.js"></script>
		<script src="./public/services/event.js"></script>
		<script src="./public/services/talks.js"></script>
		<script src="./public/services/store.js"></script>
		<script src="./public/services/global.js"></script>
		<script src="./public/services/states.js"></script>
		<script src="./public/services/reports.js"></script>
		<script src="./public/services/session.js"></script>
		<script src="./public/services/participants.js"></script>

		<script src="./public/controllers/home.js"></script>
		<script src="./public/controllers/contact.js"></script>
		<script src="./public/controllers/talk/talk.js"></script>
		<script src="./public/controllers/events/talks.js"></script>
		<script src="./public/controllers/events/qrcode.js"></script>
		<script src="./public/controllers/events/events.js"></script>
		<script src="./public/controllers/events/detail.js"></script>
		<script src="./public/controllers/events/create.js"></script>
		<script src="./public/controllers/events/reports.js"></script>
		<script src="./public/controllers/session/sessions.js"></script>
		<script src="./public/controllers/events/participants.js"></script>

	</head>

	<body>

		<div ng-app="seedApp">

			<div ui-view>
			</div>

		</div>

	</body>

</html>
