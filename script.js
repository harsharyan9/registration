<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector("form");

        form.addEventListener("submit", (event) => {
            event.preventDefault();

            const formData = new FormData(form);

            // Redirect to PHP page with the form data
            const params = new URLSearchParams(formData);
            window.location.href = `process.php?${params.toString()}`;
        });
    });
</script>
