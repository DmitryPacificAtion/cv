var alphabet = 'ABCĆČDĐEFGHIJKLMNOPQRSŠTUVWXYZŽabcčćdđefghijklmnopqrsštuvwxyzžАБВГҐДЂЕЁЄЖЗЅИІЇЙЈКЛЉМНЊОПРСТЋУЎФХЦЧЏШЩЪЫЬЭЮЯабвгґдђеёєжзѕиіїйјклљмнњопрстћуўфхцчџшщъыьэюяΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩαβγδεζηθικλμνξοπρστυφχψωάΆέΈέΉίϊΐΊόΌύΰϋΎΫὰάὲέὴήὶίὸόὺύὼώΏĂÂÊÔƠƯăâêôơưאבגדהוזחטיכךלמםנןסעפףצץקרשת1234567890?!(%)[#]{@}®©$€£¥¢₪';
alphabet = alphabet.split('');
var row = document.querySelectorAll('#row td');

function ChinaString (positionIndex, v_stringLen = 500) {
	var v_string = '';
	this.positionIndex = positionIndex;
	this.сhinaString = function() {
		// debugger;
		row[positionIndex].innerHTML = getString();
	}
	var getString = function () {
		if (v_string.length < v_stringLen) 
			return v_string += '<span>' + alphabet[getRandomInt(0, 299)] + '</span>';
		else {
			v_string = '';
		}
		return v_string;
	}
}

function stringGenerator() {
	// debugger;
	return new ChinaString(getRandomInt(0, 27));
}

function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min)) + min;
}

var str = stringGenerator();
setInterval('str.сhinaString()', 100);