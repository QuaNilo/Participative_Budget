<div class="relative overflow-x-auto  rounded-md p-2" id="dashboard" role="tabpanel" aria-labelledby="profile-tab">
    <div x-data="{ votesOpen: false, proposalsOpen: false, editionsOpen: false }" class="flex flex-row w-full">
        <div class="flex-col flex-grow shadow mr-5">
            <div class="bg-slate-100">
                <h1 class="bold text-3xl text-center mb-4">{{__('Statistics')}}</h1>
            </div>
            <h1 @click="votesOpen = !votesOpen" class="bold text-2xl text-center">{{__('Votes')}}</h1>
            <div :class="{ 'h-0 hidden': !votesOpen, 'h-auto': votesOpen }" class="shadow bg-gray-400/10 p-2 mb-4 transition-all duration-900">
                <div class="flex flex-row mb-4 space-x-5">
                    <livewire:statistics-card :value="$count_votes_winner_proposal" :title="'Votes on Winner Proposals'"/>
                    <livewire:statistics-card :value="$total_votes" :title="'Total Votes'"/>
                    <livewire:statistics-card :value="$averageVotesOnAllEditions" :title="'Average Votes On All Editions'"/>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/2 h-1/2 flex-grow">
                        <p>Votes per Edition</p>
                        <canvas id="votesPerEdition"></canvas>
                    </div>
                    <div class="w-1/2 h-full">
                        <p>Most Voted Edition</p>
                        <canvas id="dummyChart"></canvas>
                    </div>

                </div>
            </div>

            <h1 @click="proposalsOpen = !proposalsOpen" class="bold text-2xl text-center">{{__('Proposals')}}</h1>
            <div :class="{ 'h-0 hidden': !proposalsOpen, 'h-auto': proposalsOpen }" class="shadow bg-gray-400/10 p-2 mb-4 transition-all duration-900">
                <div class="flex flex-row mb-4 space-x-5">
                    <livewire:statistics-card :value="'112'" :title="'Proposals Created'"/>
                    <livewire:statistics-card :value="'Criação de um jardim'" :title="'Most Voted Proposal'"/>
                    <livewire:statistics-card :value="'10'" :title="'Winner Proposals Count'"/>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/2 h-1/2">
                        <p>Most Voted Edition</p>
                        <canvas id="ProposalsRankedByVote"></canvas>
                    </div>
                    <div class="w-1/2 h-full">
                        <p>Most Proposals Per Edition</p>
                        <canvas id="MostProposalsPerEdition"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div id="verified_status" class="shadow dark:shadow-gray-800 h-full">
            <div class="bg-slate-100">
                <h1 class="bold text-2xl mb-2 text-center">{{__('Account Status')}}</h1>
            </div>
            <div class="text-center p-2">
                @if($setting->require_cc_vote_create)
    {{--                <p>Cartão cidadão : </p>--}}
                    @if(auth()->user()->citizen->CC_verified)
                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-indigo-600/30"> {{__('Cartão Cidadão Verificado')}}</p>
                    @else
                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-red-600/30"> {{__('Cartão cidadão não verificado')}}</p>
                    @endif
                    <p> </p>
                @endif
            </div>
            <div class="text-center p-2">
                @if($setting->require_address_vote_create)
    {{--                <p>Cartão cidadão : </p>--}}
                    @if(auth()->user()->citizen->CC_verified)
                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-indigo-600/30"> {{__('Morada Verificada')}}</p>
                    @else
                        <p class="inline-block shadow dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 bg-red-600/30"> {{__('Morada não verificada')}}</p>
                    @endif
                    <p> </p>
                @endif
            </div>
        </div>
    </div>
</div>
<?php
  echo "<script> var editionNames = '$editionNamesJson';</script>";
  echo "<script> var editionVotes = '$votesPerEditionJson';</script>";
?>
<script type="text/javascript">
      const votesPerEdition = document.getElementById('votesPerEdition');

      new Chart(votesPerEdition, {
        type: 'polarArea',
        data: {
          labels: JSON.parse(editionNames),
          datasets: [{
            label: '# of Votes',
            data: JSON.parse(editionVotes),
            borderWidth: 2
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      const dummyChart = document.getElementById('dummyChart');

      new Chart(dummyChart, {
        type: 'bar',
        data: {
          labels: JSON.parse(editionNames),
          datasets: [{
            label: '# of Votes',
            data: JSON.parse(editionVotes),
            borderWidth: 2
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      const ProposalsRankedByVote = document.getElementById('ProposalsRankedByVote');

      new Chart(ProposalsRankedByVote, {
        type: 'polarArea',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 2
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });


        const MostProposalsPerEdition = document.getElementById('MostProposalsPerEdition');

      new Chart(MostProposalsPerEdition, {
        type: 'bar',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 2
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
</script>
