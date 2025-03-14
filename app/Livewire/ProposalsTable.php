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
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Proposal;

class ProposalsTable extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        $newModel = new Proposal();
        return $table
            ->query(Proposal::query())
            ->columns([
                TextColumn::make('user.name')
                ->label(__('User'))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("category.name")
                ->label(__('Category'))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("edition.identifier")
                ->label(__("Edition"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("title")
                ->label($newModel->getAttributeLabel("title"))
                ->limit(32)
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("winner")
                ->label($newModel->getAttributeLabel("winner"))
                ->formatStateUsing(fn (Proposal $record): string => $record->winnerLabel)
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("rank")
                ->label($newModel->getAttributeLabel("rank"))
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("status")
                ->label($newModel->getAttributeLabel("status"))
                ->formatStateUsing(fn (Proposal $record): string => $record->statusLabel)
                ->sortable()
                ->toggleable()
                ->searchable(),
            TextColumn::make("budget_estimate")
                ->label($newModel->getAttributeLabel("budget_estimate"))
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
            ->actions([
                Action::make('edit')
                ->label(__('Update'))
                ->url(fn (Proposal $record): string => route('proposals.edit', ['proposal' => $record]))
                ->icon('heroicon-o-pencil')
                //->color('danger')
            ])
            ->bulkActions([
                //BulkActionGroup::make([
                BulkAction::make('delete')
                ->requiresConfirmation()
                ->action(fn (Collection $records) => $records->each->delete())
                //]),
            ])
            ->defaultSort('id', 'desc')
            ->recordUrl(
                fn (Model $record): string => route('proposals.show', ['proposal' => $record]),
            )
            //->striped()
            ->persistFiltersInSession()
            ->persistSearchInSession()
            ->defaultPaginationPageOption(25);
    }

    public function render() : View
    {
        return view('proposals.table');
    }
}
