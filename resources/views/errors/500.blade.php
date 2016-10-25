<div class="content">
    <div class="title">Something went wrong.</div>
    @unless(empty($sentryID))
        <!-- Sentry JS SDK 2.1.+ required -->
        <script src="https://cdn.ravenjs.com/3.3.0/raven.min.js"></script>

        <script>
        Raven.showReportDialog({
            eventId: '{{ $sentryID }}',

            // use the public DSN (dont include your secret!)
            dsn: 'https://51c2de4e37e64d48b00c03e9a1d2fc36@app.getsentry.com/94466'
        });
        </script>
    @endunless
</div>
