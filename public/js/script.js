document.addEventListener("DOMContentLoaded", function () {
    const htmlCode = document.getElementById("html-code");
    const cssCode = document.getElementById("css-code");
    const jsCode = document.getElementById("js-code");
    const output = document.getElementById("editor-output");

    function run() {
        localStorage.setItem("html_code", htmlCode.value);
        localStorage.setItem("css_code", cssCode.value);
        localStorage.setItem("js_code", jsCode.value);

        const htmlContent = localStorage.getItem("html_code");
        const cssContent = `<style>${localStorage.getItem("css_code")}</style>`;
        const jsContent = `<script>(function(){${localStorage.getItem(
            "js_code"
        )}})();</script>`;

        // output.contentDocument.open();
        // output.contentDocument.write(cssContent + htmlContent + jsContent);
        // output.contentDocument.close();

        output.contentDocument.open();
        output.contentDocument.writeln(cssContent + htmlContent + jsContent);
        output.contentDocument.close();
    }

    htmlCode.addEventListener("keyup", run);
    cssCode.addEventListener("keyup", run);
    jsCode.addEventListener("keyup", run);

    // Wait for the iframe to load before running the code
    output.onload = run;

    // Set textarea values from localStorage
    htmlCode.value = localStorage.getItem("html_code");
    cssCode.value = localStorage.getItem("css_code");
    jsCode.value = localStorage.getItem("js_code");

    run(); // Run initially
});
