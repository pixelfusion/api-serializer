# Pixel Fusion API Serializer

[![NZ](http://img.shields.io/badge/made%20in-nz-blue.svg?style=flat-square)](http://pixelfusion.co.nz)
[![Love](http://img.shields.io/badge/built%20with-love-red.svg?style=flat-square)](http://pixelfusion.co.nz)
[![Awesomeness](http://img.shields.io/badge/awesome-100%25-brightgreen.svg?style=flat-square)](http://pixelfusion.co.nz)

This package provides a custom Serializer for [Fractal](http://fractal.thephpleague.com) that transforms data into the API output that we at [Pixel Fusion](https://pixelfusion.co.nz) prefer.

## Installation

To install the latest version of this package run the following command:

```
composer require pixelfusion/api-serializer
```

After that you should change the serializer that you want to use to `PixelFusion\Fractal\Serializer\ApiSerializer`.

## Output format

This API serializer extends the default ArraySerializer but has two slight differences.

First of all we don't use the meta key in the root of the response. Secondly, for the pagination we omitted the fields that we don't use. Below is an example of how a response that includes pagination will look like:

```json
{
  "data": [
    {
      "id": "7ywpxp6r",
      "title": "The Godfather",
    },
    {
      "id": "q9pykp17",
      "title": "Pulp Fiction",
    }
  ],
  "pagination": {
    "total": 9,
    "per_page": 2,
    "current_page": 1,
    "last_page": 5
  }
}
```
