<?php


it('GETS all entities')
    ->asUser()
    ->withCampaign()
    ->withCharacters()
    ->withCreatures()
    ->get('/api/1.0/campaigns/1/entities')
    ->assertStatus(200)
;

it('GETS a specific entity')
    ->asUser()
    ->withCampaign()
    ->withCharacters()
    ->withCreatures()
    ->get('/api/1.0/campaigns/1/entities/1')
    ->assertStatus(200)
;

it('GETS all creatures')
    ->asUser()
    ->withCampaign()
    ->withCharacters()
    ->withCreatures()
    ->get('/api/1.0/campaigns/1/entities?types=creature')
    ->assertStatus(200)
    ->assertJsonCount(5, 'data');
;

it('Transforms entities')
    ->asUser()
    ->withCampaign()
    ->withCharacters()
    ->postJson('/api/1.0/campaigns/1/transform', [
        'entities' => [1,2,3],
        'entity_type' => 'organisation'
    ])
    ->assertJsonFragment(['success' => 'Succesfully transformed 3 entities.'])
    ->assertStatus(200)
;

it('Transfers entities')
    ->asUser()
    ->withCampaign()
    ->withCharacters()
    ->withCampaigns()
    ->postJson('/api/1.0/campaigns/1/transfer', [
        'entities' => [1,2,3],
        'campaign_id' => 2,
        'copy'  => false
    ])
    ->assertJsonFragment(['success' => 'Succesfully transfered 3 entities.'])
    ->assertStatus(200)
;

it('Copies entities')
    ->asUser()
    ->withCampaign()
    ->withCharacters()
    ->withCampaigns()
    ->postJson('/api/1.0/campaigns/1/transfer', [
        'entities' => [1,2,3],
        'campaign_id' => 2,
    ])
    ->assertJsonFragment(['success' => 'Succesfully copied 3 entities.'])
    ->assertStatus(200)
;
