		/**
		* ---------------------------------------------------------------------
		* Documentation Code CRUD.js 
		* ---------------------------------------------------------------------
		*
		* Create , read, update, delete dengan google firebase 
		* 
		*
		*
		*/

		// firebase config
		// For Firebase JavaScript SDK v7.20.0 and later, `measurementId` is an optional field
		var firebaseConfig = {
			apiKey: "",
			authDomain: "",
			databaseURL: "",
			projectId: "",
			storageBucket: "",
			messagingSenderId: "",
			appId: "",
			measurementId: "",
		};

		// For Firebase JavaScript SDK v7.20.0 and later, `measurementId` is an optional field
		var firebaseConfig = {
			apiKey: "",
			authDomain: "",
			databaseURL: "",
			projectId: "",
			storageBucket: "",
			messagingSenderId: "",
			appId: "",
			measurementId: ""
		};

		//------------------- ready data --------------------------------- //
		var nameV, rollV, setV, genV;

		function Ready() 
			{
				rollV = document.getElementById('rollbox').value;
				nameV = document.getElementById('namebox').value;
				secV = document.getElementById('sectionbox').value;
				genV = document.getElementById('genderbox').value;

				console.log(rollV,nameV,secV,genV);
			}
		//------------------- insert data --------------------------------- //
		document.getElementById('insert').onclick = function () {
			Ready();
			firebase.database().ref('student/'+rollV).set({
				NameOfstudent: nameV,
				Rollno : rollV,
				Section : secV,
				Gender: genV
			})
		};
	//------------------- select data --------------------------------- //
		document.getElementById('select').onclick = function () {
			Ready();
			firebase.database().ref('student/'+rollV).on('value', function (snapshot) {
						nameV = document.getElementById('namebox').value = snapshot.val().NameOfstudent;	
						nameV = document.getElementById('sectionbox').value = snapshot.val().Section;	
						nameV = document.getElementById('genderbox').value = snapshot.val().Gender;	
			});
		};
	//------------------- update data --------------------------------- //
		document.getElementById('update').onclick = function () {
			Ready();
			firebase.database().ref('student/'+rollV).update({
				NameOfstudent: nameV,
				Section : secV,
				Gender: genV
			})
		};
	//------------------- delete data --------------------------------- //
		document.getElementById('delete').onclick = function () {
			Ready();
			firebase.database().ref('student/'+rollV).remove();
		};
