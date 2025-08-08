# WP Salesforce Lead Form

Adds a shortcode `[salesforce_lead_form]` to render a simple contact form that creates a Lead in Salesforce on submit.

## Install
1. Copy the `wp-salesforce-lead` folder into your WordPress site's `wp-content/plugins/` directory.
2. In WordPress admin, go to Plugins and activate "WP Salesforce Lead Form".

## Configure Salesforce
1. In Salesforce, create a Connected App (Setup → App Manager → New Connected App):
   - Enable OAuth Settings
   - Callback URL: you can use any valid URL for Username-Password flow (not used), e.g. `https://example.com/callback`
   - Selected OAuth Scopes: `Access and manage your data (api)`
   - Save and note the Consumer Key and Consumer Secret
2. Reset or obtain your Security Token (Setup → My Personal Information → Reset My Security Token). Check your email for the token.

## Plugin Settings
- WordPress Admin → Settings → Salesforce Lead
- Enter:
  - Environment: Production or Sandbox
  - Consumer Key (Client ID)
  - Consumer Secret (Client Secret)
  - Salesforce Username
  - Salesforce Password
  - Security Token (from email)
  - API Version (default `v58.0`)

Note: This plugin uses Salesforce OAuth 2.0 Username-Password flow for simplicity. In production, consider implementing the Web Server OAuth flow for stronger security and auditability.

## Usage
Place the shortcode on any page or post:

```
[salesforce_lead_form]
```

Optional attributes:
- `redirect`: URL to redirect to after submit (e.g. a thank-you page):

```
[salesforce_lead_form redirect="/thank-you/"]
```

## Fields Mapped
- First Name → `FirstName`
- Last Name → `LastName` (required)
- Company → `Company` (required)
- Email → `Email` (required)
- Phone → `Phone`
- Message → `Description`
- Lead Source → `Website`
- Website → Hostname of the page submitted

## Troubleshooting
- If you see an error after submit, verify credentials on the settings page.
- In a Sandbox, ensure you set Environment = Sandbox.
- If passwords or tokens change, update settings and try again.
- Check WordPress debug log for details (`WP_DEBUG_LOG`).

## Security
- Nonce verification and sanitization are applied.
- Basic honeypot field reduces bot submissions.

## License
MIT