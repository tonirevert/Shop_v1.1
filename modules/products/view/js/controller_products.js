//Plugin to put the values into the fields if them are empty

jQuery.fn.fill_or_clean = function () {
    this.each(function () {
        if ($("#prodname").attr("value") === "") {
            $("#prodname").attr("value", "Input product name");
            $("#prodname").focus(function () {
                if ($("#prodname").attr("value") === "Input product name") {
                    $("#prodname").attr("value", "");
                }
            });
        }
        $("prodname").blur(function () {
            if ($("#prodname").attr("value") === "") {
                $("#prodname").attr("value", "Input product name");
            }
        });
    });//End of the each
};
