    // Define translations
    const translations = {
        "en": {
            "welcome": "Welcome to our website!",
            "see more": "See More",
            "text one": "With a commitment to quality and innovation, we bring your vision to life—'Touch Your Dream' with our expert construction services.",
            "that-inspire": "that's Inspire",
            "read more": "Read More",
            // "delivering": "Delivering",
            // "design": "Design",
            // "excellence": "Excelllence",
            "paragraph design": "Three years ago, we set out to build structures that stand the test of time while exceeding client expectations.Today, our construction company is a testament to hard work, integrity, and quality. From homes to commercial spaces, we’ve completed projects that showcase our craftsmanship. Our skilled professionals tailor each build to clients' needs, using cutting-edge technology and sustainable materials. Beyond construction, we build strong relationships based on trust and transparency. As we celebrate three years, we look forward to creating lasting structures and making a meaningful impact. Let’s build something great—contact us today!",
            "year": "Year",
            "experience": "Experience",
            "happy": "Happy",
            "clients": "Clients",
            "portfolio": "Portfolio",
            "mandalay": "Mandalay",
            "myanmar": "Myanmar",

            "information": "Information",
            "team": "Team",
            "project": "Projects",
            "find us on social media": "Find Us on Social Media",
            "priority": "priority",
            "priority": "priority",
            "priority": "priority",
            "client satisfaction is our": "Client Satisfaction is our",
            "priority": "Priority",
            "clinet": "Client",
            "satisfaction": "Satisfaction",
            "is our": "Is Our",
            // "priority": "Priority",
            "our happy clients": "Our Happy Clients",
        },
        "mm": {
            "welcome": "ကျွန်ုပ်တို့၏ ဝဘ်ဆိုက်မှ ကြိုဆိုပါသည်!",
            "see more": "ပိုကြည့်",
            "text one": "Quality နှင့် Inovation ကို ပေါင်းစပ်ပြီး သင့် လိုအပ်ချက်အားလုံးကို ဖြည့်စည်းပေးမယ့် Construction Services",
            "that-inspire": "ဆွဲဆောင်မှုရှိတဲ့ ဒီဇိုင်းပါ။",
            "read more": "ဆက်ဖတ်ရန်",
            // "delivering": "ပို့ဆောင်ပေးခြင်း",
            // "design": "ဒီဇိုင်း",
            // "excellence": "သာလွန်ကောင်းမွန်မှု",
            "paragraph design": "မိတ်ဆွေ Client တွေရဲ့ လိုအပ်ချက်တွေကို ဖြည့်ဆည်းပေးရင်း Toe Shwe Kaug ရှေ့ဆက်လာခဲ့တာ ၃ နှစ် ပြည့်လာခဲ့ပြီ ဖြစ်ပါတယ် ။ ၃ နှစ်အတွင်း ကျွန်တော်တို့ရဲ့ အလုပ်ကြိုးစားမှု , ဇွဲ , Quality တို့ကို လက်တွေ့  Project များဖြင့် သက်သေပြခဲ့ပြီးဖြစ်ပါတယ် ။ ကျွန်တော်တို့ရဲ့ အရည်အချင်းပြည့်၀တဲ့ Team ဟာ ဆိုရင် Cliient တွေရဲ့ လိုအပ်ချက်ကို ဖြည့်ဆည်းပေးရုံ သာ မက အရေးကြီးတဲ့ Engineering ဆိုင်ရာ အရည်အသွေးတွေ ကုန်ကြမ်း အရည်အသွေးတွေကို အထူးဂရုထား Service  ပေးလျက်ရှိပါတယ် ။သာမန် Construction Services များအပြင် Client တွေရဲ့ စိတ်ကျေနပ်မှု နှင့် Relationship ကိုပါ အလေးထား ဆောင်ရွက်ပေးတဲ့ ကျွန်တော်တို့ Toe Shwe Kaung နှင့် တွဲ အလုပ်လုပ်ဖို့ အခုပဲ ဆက်သွယ်လိုက်ပါ",
            "year": "နှစ်",
            "experience": "အတွေ့အကြုံ",
            "happy": "ပျော်ရွှင်သော",
            "clients": "ဖောက်သည်များ",
            "portfolio": "လုပ်ငန်းဇယား",
            "mandalay": "မန္တလေး",
            "myanmar": "မြန်မာ",

            "information": "သတင်းအချက်အလက်",
            "team": "အဖွဲ့",
            "project": "စီမံကိန်းများ",
            "find us on social media": "ဆိုရှယ်မီဒီယာတွင် ကျွန်ုပ်တို့ကို ရှာပါ",
            "priority": "priority",
            "priority": "priority",
            "priority": "priority",
            "client satisfaction is our": "Client စိတ်ကျေနပ်မှုသည် ကျွန်ုပ်တို့ ပထမ ဦးစားပေး",
            "priority": "  ဖြစ်သည်",
            "client": "Client ",
            "satisfaction": "စိတ်ကျေနပ်မှုသည် ကျွန်ုပ်တို့ ",
            "is our": "ပထမ ဦးစားပေး",
            // "priority": "Priority",
            "our happy clients": "ကျွန်ုပ်တို့၏ပျော်ရွှင်သောဖောက်သည်များ",
        }
    };

    // Function to set language
    function setLanguage(lang) {
        localStorage.setItem("language", lang);
        
        $("[data-lang]").each(function () {
            let key = $(this).attr("data-lang");
            let translation = translations[lang][key] || key;
            $(this).text(translation);
            // if (lang === "mm") {
            //     $(this).css({
            //         "font-family": "'Noto Sans Myanmar', sans-serif",
            //         "line-height": "1.6",
            //     });
            // } else {
            //     $(this).css({
            //         "font-family": "'Arial', sans-serif",
            //     });
            // }
            $(this).removeClass("lang-en lang-mm").addClass(lang === "mm" ? "lang-mm" : "lang-en");
        });
    }

    $(document).ready(function () {
        // Get saved language or default to English
        let lang = localStorage.getItem("language") || "en";
        setLanguage(lang);

        $("#language-selector").on("change", function () {
            setLanguage(this.value);
        });
        $("#language-selector").val(lang);
        $("#language-selector-mobile").on("change", function () {
            setLanguage(this.value);
        });
        $("#language-selector-mobile").val(lang);
    });
