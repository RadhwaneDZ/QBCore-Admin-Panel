local QBCore = exports['qb-core']:GetCoreObject()



---------------------------
-- Server Join Deferrals --
---------------------------
AddEventHandler('playerConnecting', function(name, setCallback, deferrals)
    local player = source
    local playerIdentifier = GetPlayerIdentifiers(player)

    deferrals.defer()
    Wait(0)
    deferrals.update(string.format('Hello %s. Loading Player Information', name))

    local License
        for _, v in pairs(playerIdentifier) do if string.find(v, "license") then License = v break end
    end
    
    local Steam
        for _, v in pairs(playerIdentifier) do if string.find(v, "steam") then Steam = v break end
    end

    local Discord
        for _, v in pairs(playerIdentifier) do if string.find(v, "discord") then Discord = v break end
    end

    if not Steam then
        deferrals.done('We could not detect Steam running in the background of your computer. Try launching it and reconnecting.')
    elseif not Discord then
        deferrals.done('We could not detect Discord running in the background of your computer. Try launching it and reconnecting.')
    elseif not License then
        deferrals.done('We could not detect a rockstar license. Try launching the rockstar application.')
    else
        local result = exports.oxmysql:fetchSync('SELECT * FROM adminpanel_players WHERE license = ?', { License })
        if result[1] then
            deferrals.update(string.format('Hello %s. Loading Player Information', name))
            Wait(1000)
            deferrals.done()
        else
            exports.oxmysql:insert('INSERT into adminpanel_players (license, steam, discord, playername) VALUES (?, ?, ?, ?)',{License, Steam, Discord, GetPlayerName(player)})
            deferrals.update(string.format('Hello %s. Loading Player Information', name))
            Wait(1000)
            deferrals.done()
        end
    end
end)