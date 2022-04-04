var config = {
	load_data: function() {
		data = localStorage.getItem("config_data");
		
		if (data != null) {
			try {
				config.data = JSON.parse(data);
			}
			catch (SyntaxError) {
				alert("Error: Wrong data structure!");
			}
		}
		
	},
	
	save_data: function(new_data) {
		localStorage.setItem("config_data", JSON.stringify(new_data));
	},
	
	reset_data: function() {
		localStorage.removeItem("config_data");
	},

	data: {
		language: "en",

		timetable: [
			{
				day: "Monday",
				schedule: [
					{subject: "Men Fellowship Meeting", room: 321},
					{subject: "Choir Rehearsal", room:304},
					{subject: "All-Night Service", room: 329},
					{subject: "", room: ""},
					{subject: "", room: ""},
					{subject: "", room:""}, 
					{subject: "", room: ""},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "", room: ""}
				]
			},

			{
				day: "Tuesday",
				schedule: [
					{subject: "", room: ""},
					{subject: "Tuesday Service", room: 208},
					{subject: "", room: ""},
					{subject: "", room: ""},
					{subject: "", room: ""},
					{subject: "", room: ""},
					{subject: "Music",  room: 211},
					{subject: "", room: ""},
					{subject: "", room: ""},
					{subject: "", room: ""}
				]
			},

			{
				day: "Wednesday",
				schedule: [
					{subject: "Choir Rehearsal", room:306},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "Men Fellowship Meeting", room:321},
					{subject: "", room: ""},
					{subject: "", room: ""},
					{subject: "", room: ""},
					{subject: "", room: ""}
				]
			},

			{
				day: "Thursday",
				schedule: [
					{subject: "Men Fellowship Meeting", room:321},
					{subject: "", room:""},
					{subject: "", room:312},
					{subject: "Prayer Meeting", room:""},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "", room: ""},
					{subject: "", room: ""}
				]
			},

			{
				day: "Friday",
				schedule: [
					{subject: "Men Fellowship Meeting", room:321},
					{subject: "Men Fellowship Meeting", room:321},
					{subject: "All-Night Service", room:206},
					{subject: "", room:""},
					{subject: "", room:""},
					{subject: "English", room:217},
					{subject: "Sport", room:"SHG"},
					{subject: "Sport", room:"SHG"},
					{subject: "", room: ""},
					{subject: "", room: ""}
				]
			}
		],
	
	
	
		periods: [
			{start: "07:50", end: "08:35"},
			{start: "08:40", end: "09:25"},
			{start: "09:40", end: "10:25"},
			{start: "10:30", end: "11:15"},
			{start: "11:30", end: "12:15"},
			{start: "12:15", end: "13:00"},
			{start: "13:15", end: "14:00"},
			{start: "14:00", end: "14:45"},
			{start: "14:45", end: "15:30"},
			{start: "15:30", end: "16:15"}
		],
	
	
	
		colors: {
			"Tuesday Service":	"#552200",
			"Biology": 			"#337732",
			"All-Night Service":"#0055AA",
			"English": 			"#FF8800",
			"Prayer Meeting":	"#447777",
			"Maths": 			"#009922",
			"Music": 			"#DD2222",
			"Men Fellowship Meeting":"#0088FF",
			"Religion": 		"#AA00DD",
			"Choir Rehearsal":		"#FFCC00",
			"Sport":			"#222222",
		}
	}
};
