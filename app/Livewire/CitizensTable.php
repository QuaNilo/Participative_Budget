<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use App\Models\Citizen;

class CitizensTable extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        $newModel = new Citizen();
        $query = Citizen::query();
        if(request()->get('pending', 0) == 1)
        {
            $query->where('CC_verified', 2);
        }
        return $table
            ->query($query)
            ->columns([
                TextColumn::make("user.name")
                ->label($newModel->getAttributeLabel("User Name"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("gender")
                ->label($newModel->getAttributeLabel("gender"))
                ->formatStateUsing(fn (Citizen $record): string => $record->genderLabel)
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("occupation")
                ->label($newModel->getAttributeLabel("occupation"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("CC")
                ->label($newModel->getAttributeLabel("Citizen Card"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("CC_verified")
                ->label($newModel->getAttributeLabel("CC_verified"))
                ->formatStateUsing(fn (Citizen $record): string => $record->CcverifiedLabel)
                ->sortable()
                ->toggleable()
                ->searchable(),
                TextColumn::make('created_at')
                    ->label($newModel->getAttributeLabel('created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label($newModel->getAttributeLabel('updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                //TextColumn::make('id'),
                //TextColumn::make('name')->sortable()->searchable()->toggleable(),
                //TextColumn::make('body')->description(fn (Demo $model): string => $model->statusLabel),
                //TextColumn::make('body')->searchable(isIndividual: true, isGlobal: true)->toggleable(),
                //TextColumn::make('status')->formatStateUsing(fn (Demo $model): string => $model->statusLabel)->searchable(isIndividual: true, isGlobal: false)->toggleable(),
                //TextColumn::make('created_at')->dateTime()->toggleable()->searchable(isIndividual: true, isGlobal: false),

                /*SelectColumn::make('status')
                ->searchable(isIndividual: true, isGlobal: true)
                ->options(Demo::getStatusArray()),*/
            ])
            ->filters([
                /*Filter::make('statusActive')
                ->label($newModel->getAttributeLabel('status'))
                ->query(fn (Builder $query): Builder => $query->where('status', Demo::STATUS_ACTIVE))
                ->label('Estado ativo')
                ->toggle(),
                SelectFilter::make('status')
                ->label($newModel->getAttributeLabel('status'))
                ->multiple()
                ->options(Demo::getStatusArray())*/
            ])
//            ->actions([
//                Action::make('edit')
//                ->label(__('Update'))
//                ->url(fn (Citizen $record): string => route('citizens.edit', ['citizen' => $record]))
//                ->icon('heroicon-o-pencil')
//                //->color('danger')
//            ])
            ->bulkActions([
                //BulkActionGroup::make([
                BulkAction::make('delete')
                ->requiresConfirmation()
                ->action(fn (Collection $records) => $records->each->delete())
                //]),
            ])
            ->defaultSort('id', 'desc')
            ->recordUrl(
                fn (Model $record): string => route('citizens.show', ['citizen' => $record]),
            )
            //->striped()
            ->persistFiltersInSession()
            ->persistSearchInSession()
            ->defaultPaginationPageOption(25);
    }

    public function render() : View
    {
        return view('citizens.table');
    }
}
