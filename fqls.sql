// Eventos que meus amigos vão e que ocorre no dia 08 de dezembro.
SELECT eid, name, pic, description
      FROM event WHERE start_time > "2013-12-08T01:00:00-00:00" AND 
                       start_time < "2013-12-09T01:00:00-00:00" AND 
      eid IN 
         (SELECT eid FROM event_member WHERE rsvp_status= "attending" AND uid IN 
         (SELECT uid2 from friend WHERE uid1 = me())
) LIMIT 6



// Verifica quais meus amigos que usam o aplicativo
SELECT uid, name 
FROM user 
WHERE is_app_user AND uid IN (SELECT uid2 FROM friend WHERE uid1 = me())



// Faz uma métrica de acesso
SELECT daily_active_users, weekly_active_users, monthly_active_users  
FROM application 
WHERE app_id = 128300630673976




// Acha a cidade pelo nome --> TEM QUE VALIDAR SE O categories VEM COMO "City"
SELECT name, location, fan_count, talking_about_count, were_here_count, categories
FROM page 
WHERE contains("Recife") AND strpos(name, "Recife") >=0

// Pesquisa cidade pelo nome somente o que é útil --> TEM QUE VALIDAR SE O categories VEM COMO "City"
SELECT location, categories
FROM page 
WHERE contains("Recife") AND strpos(name, "Recife") >=0


// FQL com longitude e latitude
http://stackoverflow.com/questions/15722538/fql-query-through-category-list