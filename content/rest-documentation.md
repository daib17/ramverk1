---
title: "REST API Documentation"
---
REST API
=========================

This documentation introduces the different REST API available on this website.   

IP validator
-------------------------
Simple IP address validator for IPv4 and IPv6.

```text
/api/json?ip=[ip address]
```

Result:

```json
{
    "ip":"172.217.168.164",
    "message":"172.217.168.164 is a valid IPv4 address.",
    "host":"mad07s10-in-f4.1e100.net"
}
```

IP Geolocator
-------------------------
Real-time IP to geolocation API capable of looking up accurate location data.

```text
json/geo?ip=[ip address]
```
Result:

```json
{
    "ipJson":"217.33.24.61",
    "type":"ipv4",
    "city":"Cricklewood",
    "country_name":"United Kingdom",
    "latitude":51.5608,
    "longitude":-0.2233
}
```


Weather Forecast
-------------------------
The Weather Forecast REST API allows you to request both forecasts and historical weather data from the past month.

IP address (week's forecast):
```text
json/forecast?ip=[ip address]&period=0
```
Latitude/Longitude (last 30 days):

```text
json/forecast?lat=[latitude]&lon=[longitude]&period=1
```

Result:

```json
{
    "latitude":37.751,
    "longitude":-97.822,
    "timezone":"America\/Chicago",
    "currently":
    {
        "time":1544290893,
        "summary":"Partly Cloudy",
        "icon":"partly-cloudy-day",
        "nearestStormDistance":3,
        "nearestStormBearing":311,
        "precipIntensity":0,
        "precipProbability":0,
        "temperature":0.48,
        "apparentTemperature":-3.3,
        "dewPoint":-6.62,
        "humidity":0.59,
        "pressure":1030.5,
        "windSpeed":3.46,
        "windGust":3.57,
        "windBearing":41,
        "cloudCover":0.42,
        "uvIndex":2,
        "visibility":16.09,
        "ozone":270.01
    }
}
```
