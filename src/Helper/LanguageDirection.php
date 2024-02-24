<?php

namespace LaravelBot\BotFather\Helper;

use LaravelBot\BotFather\Constant\LanguageCode;

class LanguageDirection
{
    public static function Get(string $languageCode): string
    {
        $textDirections = [
            LanguageCode::AFRIKAANS => 'ltr',
            LanguageCode::AMHARIC => 'ltr',
            LanguageCode::ARABIC => 'rtl',
            LanguageCode::MAPUDUNGUN => 'ltr',
            LanguageCode::ASSAMESE => 'ltr',
            LanguageCode::AZERBAIJANI => 'ltr',
            LanguageCode::BASHKIR => 'ltr',
            LanguageCode::BELARUSIAN => 'ltr',
            LanguageCode::BULGARIAN => 'ltr',
            LanguageCode::BENGALI => 'ltr',
            LanguageCode::TIBETAN => 'ltr',
            LanguageCode::BRETON => 'ltr',
            LanguageCode::BOSNIAN => 'ltr',
            LanguageCode::CATALAN => 'ltr',
            LanguageCode::CORSICAN => 'ltr',
            LanguageCode::CZECH => 'ltr',
            LanguageCode::WELSH => 'ltr',
            LanguageCode::DANISH => 'ltr',
            LanguageCode::GERMAN => 'ltr',
            LanguageCode::LOWER_SORBIAN => 'ltr',
            LanguageCode::DIVEHI => 'ltr',
            LanguageCode::GREEK => 'ltr',
            LanguageCode::ENGLISH => 'ltr',
            LanguageCode::SPANISH => 'ltr',
            LanguageCode::ESTONIAN => 'ltr',
            LanguageCode::BASQUE => 'ltr',
            LanguageCode::PERSIAN => 'rtl',
            LanguageCode::FINNISH => 'ltr',
            LanguageCode::FILIPINO => 'ltr',
            LanguageCode::FAROESE => 'ltr',
            LanguageCode::FRENCH => 'ltr',
            LanguageCode::FRISIAN => 'ltr',
            LanguageCode::IRISH => 'ltr',
            LanguageCode::SCOTTISH_GAELIC => 'ltr',
            LanguageCode::GALICIAN => 'ltr',
            LanguageCode::SWISS_GERMAN => 'ltr',
            LanguageCode::GUJARATI => 'ltr',
            LanguageCode::HAUSA => 'ltr',
            LanguageCode::HEBREW => 'rtl',
            LanguageCode::HINDI => 'ltr',
            LanguageCode::CROATIAN => 'ltr',
            LanguageCode::UPPER_SORBIAN => 'ltr',
            LanguageCode::HUNGARIAN => 'ltr',
            LanguageCode::ARMENIAN => 'ltr',
            LanguageCode::INDONESIAN => 'ltr',
            LanguageCode::IGBO => 'ltr',
            LanguageCode::YI => 'ltr',
            LanguageCode::ICELANDIC => 'ltr',
            LanguageCode::ITALIAN => 'ltr',
            LanguageCode::INUKTITUT => 'ltr',
            LanguageCode::JAPANESE => 'ltr',
            LanguageCode::GEORGIAN => 'ltr',
            LanguageCode::KAZAKH => 'ltr',
            LanguageCode::GREENLANDIC => 'ltr',
            LanguageCode::KHMER => 'ltr',
            LanguageCode::KANNADA => 'ltr',
            LanguageCode::KOREAN => 'ltr',
            LanguageCode::KONKANI => 'ltr',
            LanguageCode::KURDI => 'ltr',
            LanguageCode::KYRGYZ => 'ltr',
            LanguageCode::LUXEMBOURGISH => 'ltr',
            LanguageCode::LAO => 'ltr',
            LanguageCode::LITHUANIAN => 'ltr',
            LanguageCode::LATVIAN => 'ltr',
            LanguageCode::MAORI => 'ltr',
            LanguageCode::MACEDONIAN => 'ltr',
            LanguageCode::MALAYALAM => 'ltr',
            LanguageCode::MONGOLIAN => 'ltr',
            LanguageCode::MOHAWK => 'ltr',
            LanguageCode::MARATHI => 'ltr',
            LanguageCode::MALAY => 'ltr',
            LanguageCode::MALTESE => 'ltr',
            LanguageCode::BURMESE => 'ltr',
            LanguageCode::DUTCH => 'ltr',
            LanguageCode::NEPALI => 'ltr',
            LanguageCode::NORWEGIAN_BOKMAL => 'ltr',
            LanguageCode::NORWEGIAN_NYNORSK => 'ltr',
            LanguageCode::NORWEGIAN => 'ltr',
            LanguageCode::SESOTHO => 'ltr',
            LanguageCode::OCCITAN => 'ltr',
            LanguageCode::ODIA => 'ltr',
            LanguageCode::POLISH => 'ltr',
            LanguageCode::DARI => 'rtl',
            LanguageCode::PASHTO => 'rtl',
            LanguageCode::PORTUGUESE => 'ltr',
            LanguageCode::KICHE => 'ltr',
            LanguageCode::QUECHUA => 'ltr',
            LanguageCode::ROMANSH => 'ltr',
            LanguageCode::ROMANIAN => 'ltr',
            LanguageCode::RUSSIAN => 'ltr',
            LanguageCode::KINYARWANDA => 'ltr',
            LanguageCode::SANSKRIT => 'ltr',
            LanguageCode::YAKUT => 'ltr',
            LanguageCode::SAMI_NORTHERN => 'ltr',
            LanguageCode::SINHALA => 'ltr',
            LanguageCode::SLOVAK => 'ltr',
            LanguageCode::SLOVENIAN => 'ltr',
            LanguageCode::SAMI_SOUTHERN => 'ltr',
            LanguageCode::SAMI_LULE => 'ltr',
            LanguageCode::SAMI_INARI => 'ltr',
            LanguageCode::SAMI_SKOLT => 'ltr',
            LanguageCode::ALBANIAN => 'ltr',
            LanguageCode::SERBIAN => 'ltr',
            LanguageCode::SWEDISH => 'ltr',
            LanguageCode::KISWAHILI => 'ltr',
            LanguageCode::SYRIAC => 'ltr',
            LanguageCode::TAMIL => 'ltr',
            LanguageCode::TELUGU => 'ltr',
            LanguageCode::TAJIK => 'ltr',
            LanguageCode::THAI => 'ltr',
            LanguageCode::TURKMEN => 'ltr',
            LanguageCode::TSWANA => 'ltr',
            LanguageCode::TURKISH => 'ltr',
            LanguageCode::TATAR => 'ltr',
            LanguageCode::TAMAZIGHT => 'ltr',
            LanguageCode::UYGHUR => 'ltr',
            LanguageCode::UKRAINIAN => 'ltr',
            LanguageCode::URDU => 'rtl',
            LanguageCode::UZBEK => 'ltr',
            LanguageCode::VIETNAMESE => 'ltr',
            LanguageCode::WOLOF => 'ltr',
            LanguageCode::XHOSA => 'ltr',
            LanguageCode::YORUBA => 'ltr',
            LanguageCode::CHINESE => 'ltr',
            LanguageCode::ZULU => 'ltr',
        ];
        return $textDirections[$languageCode] ?? '';
    }
}