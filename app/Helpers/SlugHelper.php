<?php
namespace App\Helpers;
class SlugHelper {
	function slug($str, $options = array())
	{
		// Make sure string is in UTF-8 and strip invalid UTF-8 characters
		$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
		
		$defaults = array(
			'delimiter' => '-',
			'limit' => null,
			'lowercase' => true,
			'replacements' => array(),
			'transliterate' => true,
		);
		
		// Merge options
		$options = array_merge($defaults, $options);

		$char_map = array(
			// Latin
			'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C', 
			'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 
			'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O', 
			'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH', 
			'ß' => 'ss', 
			'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c', 
			'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 
			'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o', 
			'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th', 
			'ÿ' => 'y',
			// Latin Extend B
			'Ƨ' => '2', 'ƨ' => '2', 'ƻ' => '2', 'Ƽ' => '5', 'ƽ' => '5', 
			'ƿ' => 'Wynn', 'Ʒ' => 'Ezh', 'Ƹ' => 'Ezh', 'ƹ' => 'Ezh', 'ƺ' => 'Ezh', 'Ǯ' => 'Ezh', 'ǯ' => 'Ezh',
			'Ƕ' => 'Hwair', 'Ƿ' => 'Wynn', 'Ȝ' => 'Yogh', 'ȝ' => 'Yogh',
			'Ɓ' => 'B', 'Ƃ' => 'B', 'Ƅ' => 'B', 'Ɔ' => 'O', 'Ƈ' => 'C', 'Ɖ' => 'D', 'Ɗ' => 'D', 'Ƌ' => 'D',
			'Ǝ' => 'E', 'Ə' => 'E', 'Ɛ' => 'E', 'Ƒ' => 'F', 'Ɠ' => 'G', 'Ɣ' => 'G', 'Ɩ' => 'L', 'Ƙ' => 'K',
			'Ɯ' => 'M', 'Ɲ' => 'N', 'Ɵ' => 'O', 'Ơ' => 'O', 'Ƣ' => 'OI', 'Ƥ' => 'P', 'Ʀ' => 'YR', 
			'Ʃ' => 'E', 'ƪ' => 'E', 'Ƭ' => 'T', 'Ʈ' => 'T', 'Ư' => 'U', 'Ʊ' => 'U', 'Ʋ' => 'V', 'Ƴ' => 'Y',
			'Ƶ' => 'Z', 'Ǆ' => 'DZ', 'Ǉ' => 'LJ', 'Ǌ' => 'NJ', 'Ǎ' => 'A', 'Ǐ' => 'I', 'Ǒ' => 'O', 'Ǔ' => 'U',
			'Ǖ' => 'U', 'Ǘ' => 'U', 'Ǚ' => 'U', 'Ǜ' => 'U', 'ǝ' => 'E', 'Ǟ' => 'A', 'Ǡ' => 'A', 'Ǣ' => 'AE',
			'Ǥ' => 'G', 'Ǧ' => 'G', 'Ǩ' => 'K', 'Ǫ' => 'O', 'Ǭ' => 'O', 'Ǳ' => 'DZ', 'Ǵ' => 'G', 'Ǹ' => 'N',
			'Ǻ' => 'A', 'Ǽ' => 'AE', 'Ǿ' => 'O', 'Ȁ' => 'A', 'Ȃ' => 'A', 'Ȅ' => 'E', 'Ȇ' => 'E', 'Ȉ' => 'I',
			'Ȋ' => 'I', 'Ȍ' => 'O', 'Ȏ' => 'O', 'Ȑ' => 'R', 'Ȓ' => 'R', 'Ȕ' => 'U', 'Ȗ' => 'U', 'Ș' => 'S',
			'Ț' => 'T', 'Ȟ' => 'H', 'Ƞ' => 'N', 'Ȣ' => 'OU', 'Ȥ' => 'Z', 'Ȧ' => 'A', 'Ȩ' => 'E', 'Ȫ' => 'O',
			'Ȭ' => 'O', 'Ȯ' => 'O', 'Ȱ' => 'O', 'Ȳ' => 'Y', 'Ⱥ' => 'A', 'Ȼ' => 'C', 'Ƚ' => 'L', 'Ⱦ' => 'T',
			'Ɂ' => '?', 'Ƀ' => 'B', 'Ʉ' => 'U', 'Ʌ' => 'V', 'Ɇ' => 'E', 'Ɉ' => 'J', 'Ɋ' => 'Q', 'Ɍ' => 'R',
			'Ɏ' => 'Y',
			'ƀ' => 'b', 'ƃ' => 'b', 'ƅ' => 'b', 'ƈ' => 'c', 'ƌ' => 'd', 'ƍ' => 'd', 'ƒ' => 'f', 'ƕ' => 'hv',
			'Ɨ' => 'l', 'ƙ' => 'k', 'ƚ' => 'l', 'ƛ' => 'l', 'ƞ' => 'n', 'ơ' => 'o', 'ƣ' => 'oi', 'ƥ' => 'p',
			'ƫ' => 't', 'ƭ' => 't', 'ư' => 'u', 'ƴ' => 'y', 'ƶ' => 'z', 'ǅ' => 'Dz', 'ǆ' => 'dz', 'ǈ' => 'Lj',
			'ǉ' => 'lj', 'ǋ' => 'Nj', 'ǌ' => 'nj', 'ǎ' => 'a', 'ǐ' => 'i', 'ǒ' => 'o', 'ǔ' => 'u', 'ǖ' => 'u',
			'ǘ' => 'u', 'ǚ' => 'u', 'ǜ' => 'u', 'ǟ' => 'a', 'ǡ' => 'a', 'ǣ' => 'ae', 'ǥ' => 'g', 'ǧ' => 'g',
			'ǩ' => 'k', 'ǫ' => 'o', 'ǭ' => 'o', 'ǰ' => 'j', 'ǲ' => 'Dz', 'ǳ' => 'dz', 'ǵ' => 'g', 'ǹ' => 'n',
			'ǻ' => 'a', 'ǽ' => 'ae', 'ǿ' => 'o', 'ȁ' => 'a', 'ȃ' => 'a', 'ȅ' => 'e', 'ȇ' => 'e', 'ȉ' => 'i',
			'ȋ' => 'i', 'ȍ' => 'o', 'ȏ' => 'o', 'ȑ' => 'r', 'ȓ' => 'r', 'ȕ' => 'u', 'ȗ' => 'u', 'ș' => 's',
			'ț' => 't', 'ȟ' => 'h', 'ȡ' => 'd', 'ȣ' => 'ou', 'ȥ' => 'z', 'ȧ' => 'a', 'ȩ' => 'e', 'ȫ' => 'o',
			'ȭ' => 'o', 'ȯ' => 'o', 'ȱ' => 'o', 'ȳ' => 'y', 'ȴ' => 'l', 'ȵ' => 'n', 'ȶ' => 't', 'ȷ' => 'j', 
			'ȸ' => 'db', 'ȹ' => 'qp', 'ȼ' => 'c', 'ȿ' => 's', 'ɀ' => 'z', 'ɂ' => '?', 'ɇ' => 'e', 'ɉ' => 'j',
			'ɋ' => 'q', 'ɍ' => 'r', 'ɏ' => 'y',
			// Latin Extend A
			'Ā' => 'A', 'Ă' => 'A', 'Ą' => 'A', 'Ć' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Č' => 'C', 'Ď' => 'D',
			'Đ' => 'D', 'Ē' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ę' => 'E', 'Ě' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G',
			'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ĩ' => 'I', 'Ī' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
			'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'ĸ' => 'K', 'Ĺ' => 'L', 'Ļ' => 'L', 'Ľ' => 'L',
			'Ŀ' => 'L', 'Ł' => 'L', 'Ń' => 'N', 'Ņ' => 'N', 'Ň' => 'N', 'Ŋ' => 'N', 'Ō' => 'O', 'Ŏ' => 'O',
			'Ő' => 'O', 'Œ' => 'OE', 'Ŕ' => 'R', 'Ŗ' => 'R', 'Ř' => 'R', 'Ś' => 'S', 'Ŝ' => 'S', 'Ş' => 'S',
			'Š' => 'S', 'Ţ' => 'T', 'Ť' => 'T', 'Ŧ' => 'T', 'Ũ' => 'U', 'Ū' => 'U', 'Ŭ' => 'U', 'Ů' => 'U',
			'Ű' => 'U', 'Ų' => 'U', 'Ŵ' => 'W', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ż' => 'Z', 'Ž' => 'Z',
			'ā' => 'a', 'ă' => 'a', 'ą' => 'a', 'ć' => 'c', 'ĉ' => 'c', 'ċ' => 'c', 'č' => 'c', 'ď' => 'd',
			'đ' => 'd', 'ē' => 'e', 'ĕ' => 'e', 'ė' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĝ' => 'g', 'ğ' => 'g',
			'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h', 'ħ' => 'h', 'ĩ' => 'i', 'ī' => 'i', 'ĭ' => 'i', 'į' => 'i',
			'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j', 'ķ' => 'k', 'ĺ' => 'l', 'ļ' => 'l', 'ľ' => 'l', 'ŀ' => 'l',
			'ł' => 'l', 'ń' => 'n', 'ņ' => 'n', 'ň' => 'n', 'ŉ' => 'n', 'ŋ' => 'n', 'ō' => 'ō', 'ŏ' => 'o',
			'ő' => 'o', 'œ' => 'oe', 'ŕ' => 'r', 'ŗ' => 'r', 'ř' => 'r', 'ś' => 's', 'ŝ' => 's', 'ş' => 's',
			'š' => 's', 'ţ' => 't', 'ť' => 't', 'ŧ' => 't', 'ũ' => 'u', 'ū' => 'u', 'ŭ' => 'u', 'ů' => 'U',
			'ű' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ŷ' => 'y', 'ź' => 'z', 'ż' => 'z', 'ž' => 'z', 'ſ' => 's',
			// Latin Extend +
			'Ḁ' => 'A', 'Ḃ' => 'B', 'Ḅ' => 'B', 'Ḇ' => 'B', 'Ḉ' => 'C', 'Ḋ' => 'D', 'Ḍ' => 'D', 'Ḏ' => 'D',
			'Ḑ' => 'D', 'Ḓ' => 'D', 'Ḕ' => 'E', 'Ḗ' => 'E', 'Ḙ' => 'E', 'Ḛ' => 'E', 'Ḝ' => 'E', 'Ḟ' => 'F',
			'Ḡ' => 'G', 'Ḣ' => 'H', 'Ḥ' => 'H', 'Ḧ' => 'H', 'Ḩ' => 'H', 'Ḫ' => 'H', 'Ḭ' => 'I', 'Ḯ' => 'I',
			'Ḱ' => 'K', 'Ḳ' => 'K', 'Ḵ' => 'K', 'Ḷ' => 'L', 'Ḹ' => 'L', 'Ḻ' => 'L', 'Ḽ' => 'L', 'Ḿ' => 'M',
			'Ṁ' => 'M', 'Ṃ' => 'M', 'Ṅ' => 'N', 'Ṇ' => 'N', 'Ṉ' => 'N', 'Ṋ' => 'N', 'Ṍ' => 'O', 'Ṏ' => 'O',
			'Ṑ' => 'O', 'Ṓ' => 'O', 'Ṕ' => 'P', 'Ṗ' => 'P', 'Ṙ' => 'R', 'Ṛ' => 'R', 'Ṝ' => 'R', 'Ṟ' => 'R',
			'Ṡ' => 'S', 'Ṣ' => 'S', 'Ṥ' => 'S', 'Ṧ' => 'S', 'Ṩ' => 'S', 'Ṫ' => 'T', 'Ṭ' => 'T', 'Ṯ' => 'T',
			'Ṱ' => 'T', 'Ṳ' => 'U', 'Ṵ' => 'U', 'Ṷ' => 'U', 'Ṹ' => 'U', 'Ṻ' => 'U', 'Ṽ' => 'V', 'Ṿ' => 'V',
			'Ẁ' => 'W', 'Ẃ' => 'W', 'Ẅ' => 'W', 'Ẇ' => 'W', 'Ẉ' => 'W', 'Ẋ' => 'X', 'Ẍ' => 'X', 'Ẏ' => 'Y',
			'Ẑ' => 'Z', 'Ẓ' => 'Z', 'Ẕ' => 'Z', 'ẞ' => 'S', 'ẟ' => 'D', 'Ạ' => 'A', 'Ả' => 'A', 'Ấ' => 'A',
			'Ầ' => 'A', 'Ẩ' => 'A', 'Ẫ' => 'A', 'Ậ' => 'A', 'Ắ' => 'A', 'Ằ' => 'A', 'Ẳ' => 'A', 'Ẵ' => 'A',
			'Ặ' => 'A', 'Ẹ' => 'E', 'Ẻ' => 'E', 'Ẽ' => 'E', 'Ế' => 'E', 'Ề' => 'E', 'Ể' => 'E', 'Ễ' => 'E',
			'Ệ' => 'E', 'Ỉ' => 'I', 'Ị' => 'I', 'Ọ' => 'O', 'Ỏ' => 'O', 'Ố' => 'O', 'Ồ' => 'O', 'Ổ' => 'O',
			'Ỗ' => 'O', 'Ộ' => 'O', 'Ớ' => 'O', 'Ờ' => 'O', 'Ở' => 'O', 'Ỡ' => 'O', 'Ợ' => 'O', 'Ụ' => 'U',
			'Ủ' => 'U', 'Ứ' => 'U', 'Ừ' => 'U', 'Ử' => 'U', 'Ữ' => 'U', 'Ự' => 'U', 'Ỳ' => 'Y', 'Ỵ' => 'Y',
			'Ỷ' => 'Y', 'Ỹ' => 'Y', 'Ỻ' => 'LL', 'Ỽ' => 'V', 'Ỿ' => 'Y',
			'ḁ' => 'a', 'ḃ' => 'b', 'ḅ' => 'b', 'ḇ' => 'b', 'ḉ' => 'c', 'ḋ' => 'd', 'ḍ' => 'd', 'ḏ' => 'd',
			'ḑ' => 'd', 'ḓ' => 'd', 'ḕ' => 'e', 'ḗ' => 'e', 'ḙ' => 'e', 'ḛ' => 'e', 'ḝ' => 'e', 'ḟ' => 'f',
			'ḡ' => 'g', 'ḣ' => 'h', 'ḥ' => 'h', 'ḧ' => 'h', 'ḩ' => 'h', 'ḫ' => 'h', 'ḭ' => 'i', 'ḯ' => 'i',
			'ḱ' => 'k', 'ḳ' => 'k', 'ḵ' => 'k', 'ḷ' => 'l', 'ḹ' => 'l', 'ḻ' => 'l', 'ḽ' => 'l', 'ḿ' => 'm',
			'ṁ' => 'm', 'ṃ' => 'm', 'ṅ' => 'n', 'ṇ' => 'n', 'ṉ' => 'n', 'ṋ' => 'n', 'ṍ' => 'o', 'ṏ' => 'o',
			'ṑ' => 'o', 'ṓ' => 'o', 'ṕ' => 'p', 'ṗ' => 'p', 'ṙ' => 'r', 'ṛ' => 'r', 'ṝ' => 'r', 'ṟ' => 'r',
			'ṡ' => 's', 'ṣ' => 's', 'ṥ' => 's', 'ṧ' => 's', 'ṩ' => 's', 'ṫ' => 't', 'ṭ' => 't', 'ṯ' => 't',
			'ṱ' => 't', 'ṳ' => 'u', 'ṵ' => 'u', 'ṷ' => 'u', 'ṹ' => 'u', 'ṻ' => 'u', 'ṽ' => 'v', 'ṿ' => 'v',
			'ẁ' => 'w', 'ẃ' => 'w', 'ẅ' => 'w', 'ẇ' => 'w', 'ẉ' => 'w', 'ẋ' => 'x', 'ẍ' => 'x', 'ẏ' => 'y',
			'ẑ' => 'z', 'ẓ' => 'z', 'ẕ' => 'z', 'ẖ' => 'H', 'ẗ' => 't', 'ẘ' => 'w', 'ẙ' => 'y', 'ẚ' => 'a',
			'ẛ' => 's', 'ẜ' => 's', 'ẝ' => 's', 'ạ' => 'a', 'ả' => 'a', 'ấ' => 'a', 'ầ' => 'a', 'ẩ' => 'a',
			'ẫ' => 'a', 'ậ' => 'a', 'ắ' => 'a', 'ằ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ặ' => 'a', 'ẹ' => 'e',
			'ẻ' => 'e', 'ẽ' => 'e', 'ế' => 'e', 'ề' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ệ' => 'e', 'ỉ' => 'i',
			'ị' => 'i', 'ọ' => 'o', 'ỏ' => 'o', 'ố' => 'o', 'ồ' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ộ' => 'o',
			'ớ' => 'o', 'ờ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ợ' => 'o', 'ụ' => 'u', 'ủ' => 'u', 'ứ' => 'u',
			'ừ' => 'u', 'ử' => 'u', 'ữ' => 'u', 'ự' => 'u', 'ỳ' => 'y', 'ỵ' => 'y', 'ỷ' => 'y', 'ỹ' => 'y',
			'ỻ' => 'll', 'ỽ' => 'v', 'ỿ' => 'y',
			// Latin symbols
			'©' => '(c)',
			// Greek
			'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
			'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
			'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
			'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
			'Ϋ' => 'Y',
			'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
			'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
			'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
			'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
			'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
			// Turkish
			'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
			'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g', 
			// Russian
			'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
			'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
			'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
			'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
			'Я' => 'Ya',
			'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
			'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
			'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
			'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
			'я' => 'ya',
			// Ukrainian
			'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
			'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
			// Czech
			'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U', 
			'Ž' => 'Z', 
			'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
			'ž' => 'z', 
			// Polish
			'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z', 
			'Ż' => 'Z', 
			'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
			'ż' => 'z',
			// Latvian
			'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N', 
			'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
			'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
			'š' => 's', 'ū' => 'u', 'ž' => 'z'
		);

		// Make custom replacements
		$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
		
		// Transliterate characters to ASCII
		if ($options['transliterate']) {
			$str = str_replace(array_keys($char_map), $char_map, $str);
		}
		
		// Replace non-alphanumeric characters with our delimiter
		$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
		
		// Remove duplicate delimiters
		$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
		
		// Truncate slug to max. characters
		$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
		
		// Remove delimiter from ends
		$str = trim($str, $options['delimiter']);
		
		return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
	}
	
}
