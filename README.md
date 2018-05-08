# country-flag-detect-js

The plugin makes the query to the api https://geoip-db.com/jsonp
Offers up to 1000 free requests per day

If the country and date variables do not exist in localstorage, it makes the queries and creates them

If it exists but the date is old, redo the request and reload another image and save the new data in localstorage

We have a function that returns in which country is stored in localstorage currently to do if or switch with what we want


El plugin hace la consulta a la api https://geoip-db.com/jsonp
Ofrece hasta 1000 peticiones gratuitas por dia

Si no existe las variables pais y fecha en localstorage hace las consulta y las crea

Si existe pero la fecha es antigua , vuelve a hacer la peticion y volver a cargar otra imagen y guardar los nuevos datos en localstorage

Tenemos una funcion que retorna en que pais esta guardado en localstorage actualmente para hacer if or switch con lo que querramos


## Built With
* [country-flags](https://github.com/hjnilsson/country-flags) - Image used

