<?php

namespace LaravelBot\BotFather\Helper;

use LaravelBot\BotFather\Constant\LanguageCode;

class LanguageNativeName
{
    public static function Get(string $languageCode): string
    {
        $languages = [
            LanguageCode::AFRIKAANS => 'Afrikaans',
            LanguageCode::AMHARIC => 'አማርኛ',
            LanguageCode::ARABIC => 'العربية',
            LanguageCode::MAPUDUNGUN => 'Mapudungun',
            LanguageCode::ASSAMESE => 'অসমীয়া',
            LanguageCode::AZERBAIJANI => 'Azərbaycanlı',
            LanguageCode::BASHKIR => 'Башҡорт',
            LanguageCode::BELARUSIAN => 'беларуская',
            LanguageCode::BULGARIAN => 'български',
            LanguageCode::BENGALI => 'বাংলা',
            LanguageCode::TIBETAN => 'བོད་ཡིག',
            LanguageCode::BRETON => 'brezhoneg',
            LanguageCode::BOSNIAN => 'bosanski/босански',
            LanguageCode::CATALAN => 'català',
            LanguageCode::CORSICAN => 'Corsu',
            LanguageCode::CZECH => 'čeština',
            LanguageCode::WELSH => 'Cymraeg',
            LanguageCode::DANISH => 'dansk',
            LanguageCode::GERMAN => 'Deutsch',
            LanguageCode::LOWER_SORBIAN => 'dolnoserbšćina',
            LanguageCode::DIVEHI => 'ދިވެހިބަސް',
            LanguageCode::GREEK => 'ελληνικά',
            LanguageCode::ENGLISH => 'English',
            LanguageCode::SPANISH => 'español',
            LanguageCode::ESTONIAN => 'eesti',
            LanguageCode::BASQUE => 'euskara',
            LanguageCode::PERSIAN => 'فارسى',
            LanguageCode::FINNISH => 'suomi',
            LanguageCode::FILIPINO => 'Filipino',
            LanguageCode::FAROESE => 'føroyskt',
            LanguageCode::FRENCH => 'français',
            LanguageCode::FRISIAN => 'Frysk',
            LanguageCode::IRISH => 'Gaeilge',
            LanguageCode::SCOTTISH_GAELIC => 'Gàidhlig',
            LanguageCode::GALICIAN => 'galego',
            LanguageCode::SWISS_GERMAN => 'Schweizerdeutsch',
            LanguageCode::GUJARATI => 'ગુજરાતી',
            LanguageCode::HAUSA => 'Hausa',
            LanguageCode::HEBREW => 'עברית',
            LanguageCode::HINDI => 'हिंदी',
            LanguageCode::CROATIAN => 'hrvatski',
            LanguageCode::UPPER_SORBIAN => 'hornjoserbšćina',
            LanguageCode::HUNGARIAN => 'magyar',
            LanguageCode::ARMENIAN => 'Հայերեն',
            LanguageCode::INDONESIAN => 'Bahasa Indonesia',
            LanguageCode::IGBO => 'Igbo',
            LanguageCode::YI => 'ꆈꌠꁱꂷ',
            LanguageCode::ICELANDIC => 'íslenska',
            LanguageCode::ITALIAN => 'italiano',
            LanguageCode::INUKTITUT => 'Inuktitut /ᐃᓄᒃᑎᑐᑦ (ᑲᓇᑕ)',
            LanguageCode::JAPANESE => '日本語',
            LanguageCode::GEORGIAN => 'ქართული',
            LanguageCode::KAZAKH => 'Қазақша',
            LanguageCode::GREENLANDIC => 'kalaallisut',
            LanguageCode::KHMER => 'ខ្មែរ',
            LanguageCode::KANNADA => 'ಕನ್ನಡ',
            LanguageCode::KOREAN => '한국어',
            LanguageCode::KONKANI => 'कोंकणी',
            LanguageCode::KURDI => 'کوردی',
            LanguageCode::KYRGYZ => 'Кыргыз',
            LanguageCode::LUXEMBOURGISH => 'Lëtzebuergesch',
            LanguageCode::LAO => 'ລາວ',
            LanguageCode::LITHUANIAN => 'lietuvių',
            LanguageCode::LATVIAN => 'latviešu',
            LanguageCode::MAORI => 'Reo Māori',
            LanguageCode::MACEDONIAN => 'македонски јазик',
            LanguageCode::MALAYALAM => 'മലയാളം',
            LanguageCode::MONGOLIAN => 'Монгол хэл/ᠮᠤᠨᠭᠭᠤᠯ ᠬᠡᠯᠡ',
            LanguageCode::MOHAWK => 'Kanien\'kéha',
            LanguageCode::MARATHI => 'मराठी',
            LanguageCode::MALAY => 'Bahasa Malaysia',
            LanguageCode::MALTESE => 'Malti',
            LanguageCode::BURMESE => 'Myanmar',
            LanguageCode::DUTCH => 'Nederlands',
            LanguageCode::NEPALI => 'नेपाली (नेपाल)',
            LanguageCode::NORWEGIAN_BOKMAL => 'norsk (bokmål)',
            LanguageCode::NORWEGIAN_NYNORSK => 'norsk (nynorsk)',
            LanguageCode::NORWEGIAN => 'norsk',
            LanguageCode::SESOTHO => 'Sesotho sa Leboa',
            LanguageCode::OCCITAN => 'Occitan',
            LanguageCode::ODIA => 'ଓଡ଼ିଆ',
            LanguageCode::POLISH => 'polski',
            LanguageCode::DARI => 'درى',
            LanguageCode::PASHTO => 'پښتو',
            LanguageCode::PORTUGUESE => 'Português',
            LanguageCode::KICHE => 'K\'iche',
            LanguageCode::QUECHUA => 'runasimi',
            LanguageCode::ROMANSH => 'Rumantsch',
            LanguageCode::ROMANIAN => 'română',
            LanguageCode::RUSSIAN => 'русский',
            LanguageCode::KINYARWANDA => 'Kinyarwanda',
            LanguageCode::SANSKRIT => 'संस्कृत',
            LanguageCode::YAKUT => 'саха',
            LanguageCode::SAMI_NORTHERN => 'davvisámegiella',
            LanguageCode::SINHALA => 'සිංහල',
            LanguageCode::SLOVAK => 'slovenčina',
            LanguageCode::SLOVENIAN => 'slovenski',
            LanguageCode::SAMI_SOUTHERN => 'åarjelsaemiengiele',
            LanguageCode::SAMI_LULE => 'julevusámegiella',
            LanguageCode::SAMI_INARI => 'sämikielâ',
            LanguageCode::SAMI_SKOLT => 'sääm´ǩiõll',
            LanguageCode::ALBANIAN => 'shqipe',
            LanguageCode::SERBIAN => 'srpski/српски',
            LanguageCode::SWEDISH => 'svenska',
            LanguageCode::KISWAHILI => 'Kiswahili',
            LanguageCode::SYRIAC => 'ܣܘܪܝܝܐ',
            LanguageCode::TAMIL => 'தமிழ்',
            LanguageCode::TELUGU => 'తెలుగు',
            LanguageCode::TAJIK => 'Тоҷикӣ',
            LanguageCode::THAI => 'ไทย',
            LanguageCode::TURKMEN => 'türkmençe',
            LanguageCode::TSWANA => 'Setswana',
            LanguageCode::TURKISH => 'Türkçe',
            LanguageCode::TATAR => 'Татарча',
            LanguageCode::TAMAZIGHT => 'Tamazight',
            LanguageCode::UYGHUR => 'ئۇيغۇرچە',
            LanguageCode::UKRAINIAN => 'українська',
            LanguageCode::URDU => 'اُردو',
            LanguageCode::UZBEK => 'U\'zbek/Ўзбек',
            LanguageCode::VIETNAMESE => 'Tiếng Việt',
            LanguageCode::WOLOF => 'Wolof',
            LanguageCode::XHOSA => 'isiXhosa',
            LanguageCode::YORUBA => 'Yoruba',
            LanguageCode::CHINESE => '中文',
            LanguageCode::ZULU => 'isiZulu',
        ];
        return $languages[$languageCode] ?? '';
    }
}
