$ErrorActionPreference= 'silentlycontinue'

################################### Please Do Not Edit Below This Line #########################################

# Run as administrator and stays in the current directory
if (-Not ([Security.Principal.WindowsPrincipal][Security.Principal.WindowsIdentity]::GetCurrent()).IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)) {
    if ([int](Get-CimInstance -Class Win32_OperatingSystem | Select-Object -ExpandProperty BuildNumber) -ge 6000) {
        Start-Process PowerShell -Verb RunAs -ArgumentList "-NoProfile -ExecutionPolicy Bypass -Command `"cd '$pwd'; & '$PSCommandPath';`"";
        Exit;
    }
}

# Checks for the latest version of RustDesk
$url = 'https://github.com/OpenAPITools/openapi-generator/releases/latest'
$request = [System.Net.WebRequest]::Create($url)
$response = $request.GetResponse()
$realTagUrl = $response.ResponseUri.OriginalString
$RDLATEST = $realTagUrl.split('/')[-1].Trim('v')
echo "OpenAPI Generator $RDLATEST is the latest version."

echo "Downloading OpenAPI Generator version $RDLATEST."
powershell Invoke-WebRequest "https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/$RDLATEST/openapi-generator-cli-$RDLATEST.jar" -Outfile "openapi-generator-cli.jar"

pause
